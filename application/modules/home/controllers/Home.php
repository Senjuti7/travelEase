<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php
class Home extends MX_Controller
{
    function error()
    {
        $data['title'] = "Page Not Found | TravelEase";
        $data['description'] = "Oops! The page you're looking for isn't available. Return to TravelEase and plan your next unforgettable journey with us.";
        $data['keywords'] = "error page, travel booking error, TravelEase 404, travel site not found";

        $data['module'] = "home";
        $data['view_file'] = "error";
        echo Modules::run('template/layout2', $data);
    }

    function index()
    {
        $data['title'] = "Plan Your Perfect Trip | Flight, Hotel & Tour Bookings | TravelEase";
        $data['description'] = "Explore India and beyond with TravelEase! Find the best flight deals, holiday packages, and hotel bookings. Start your dream journey effortlessly with trusted travel experts.";
        $data['keywords'] = "travel booking, flight deals, hotel booking, India tour packages, international trips, affordable flights, TravelEase tours, holiday planner";
        $data['module'] = "home";
        $data['view_file'] = "home";
        echo Modules::run('template/layout1', $data);
    }

    public function oldurl_to_newurl()
    {
        // Example of redirection for old URLs (SEO friendly)
        // if (@$this->uri->segment(1) == "packers-movers-bihar-india") {
        //     redirect("bihar", 'location', 301);
        // }
    }
}
