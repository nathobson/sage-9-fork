// import external dependencies
import "jquery";
import "jquery-lazy/jquery.lazy.min";

// Import everything from autoload
import "./autoload/**/*"

// import local dependencies
import Router from "./util/Router";
import common from "./routes/common";
import templateHome from "./routes/template-home";

/** Populate Router instance with DOM routes */
const routes = new Router({
	common,
	templateHome,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
