<section class="breadcrumb">
  <div class="container">
    <div class="breadcrumb-content">
      <ul class="d-flex justify-content-start align-items-center">
        <li><a href="/" class="sm-text">Home</a></li>
        <?php
        // Get the current URL path
        $path = $_SERVER['REQUEST_URI'];

        // Remove query strings from the URL
        $path = parse_url($path, PHP_URL_PATH);

        // Break the path into an array by splitting on '/'
        $segments = explode('/', trim($path, '/'));

        // Define the folder to exclude (theme name)
        $exclude = 'bold-himalaya-theme';

        // Build the breadcrumb
        $currentPath = '';
        foreach ($segments as $key => $segment) {
            // Skip the theme folder name
            if ($segment === $exclude) {
                continue;
            }

            // Update the current path
            $currentPath .= '/' . $segment;
            
            // If it's the last segment, display it as plain text
            if ($key == count($segments) - 1) {
                echo '<li><span class="sm-text">' . ucfirst($segment) . '</span></li>';
            } else {
                // Otherwise, create a clickable link
                echo '<li><a href="' . $currentPath . '" class="sm-text">' . ucfirst($segment) . '</a></li>';
            }
        }
        ?>
      </ul>
    </div>
  </div>
</section>