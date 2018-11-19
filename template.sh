#!/bin/sh

#############################################################################
# 1. Create new view file
#############################################################################

# Ask for the full template name and store as var
echo What is the full template name i.e. Board of directors
read full

# Convert template name to slug
slug=$(awk '{for(i=1;i<=NF;i++){ $i=tolower(substr($i,1,1)) substr($i,2) }}1' <<<"$full")
slug=$(sed -e 's/ /-/g' <<<"$slug")

# Copy default custom template to a new placeholder file
cp resources/views/template-custom.blade.php resources/views/placeholder.blade.php

# Replace the template name within the placeholder file save as new template file
sed "s/Custom Template/$full/g" resources/views/placeholder.blade.php > resources/views/template-$slug.blade.php

# Remove placeholder file
rm resources/views/placeholder.blade.php

#############################################################################
# 2. Create new view partial folder
#############################################################################

# Create a new empty folder for template/view partials
mkdir resources/views/partials/$slug

#############################################################################
# 3. Create new .scss file and include in main.scss file
#############################################################################

# Create the new stylesheet
touch resources/assets/styles/layouts/_$slug.scss

# Append new stylesheet to end of main stylesheet
echo "\r@import \"layouts/$slug\";" >> resources/assets/styles/main.scss

#############################################################################
# 3. Create new controller
#############################################################################

# Create the new file
touch app/controllers/template-$slug.php

# Scaffold out empty controller
echo "<?php" >> app/controllers/template-$slug.php
echo "\r" >> app/controllers/template-$slug.php
echo "namespace App;" >> app/controllers/template-$slug.php
echo "\r" >> app/controllers/template-$slug.php
echo "use Sober\Controller\Controller;" >> app/controllers/template-$slug.php
echo "\r" >> app/controllers/template-$slug.php
camel=$(sed -e 's/-/ /g' <<<"$slug")
camel=$(awk '{for(i=1;i<=NF;i++){ $i=toupper(substr($i,1,1)) substr($i,2) }}1' <<<"$camel")
camel=$(sed -e 's/ //g' <<<"$camel")
echo "class $camel extends Controller" >> app/controllers/template-$slug.php
echo "{" >> app/controllers/template-$slug.php
echo "" >> app/controllers/template-$slug.php
echo "}" >> app/controllers/template-$slug.php

#############################################################################
# 5. Open up the new template's files in VS Code
#############################################################################

# Open controller
code app/controllers/template-$slug.php

# Open view
code resources/views/template-$slug.blade.php

# Open SCSS file
code resources/assets/styles/layouts/_$slug.scss