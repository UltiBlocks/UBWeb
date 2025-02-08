<?php

$config = json_decode(file_get_contents('config.json'), true);
$requestUri = $_SERVER['REQUEST_URI'];
$basePath = '/';
$requestUri = str_replace($basePath, '', $requestUri);
$requestUri = trim($requestUri, '/');

// Handle homepage
if (empty($requestUri)) {
    if (isset($config['homepage'])) {
        require $config['homepage'];
    } else {
        require 'src/index.php';
    }
    exit;
}

// Check for static files (images, CSS, etc.) FIRST
$staticPath = $requestUri;
if (file_exists($staticPath) && is_file($staticPath)) {
    $mimeType = mime_content_type($staticPath);
    header('Content-Type: ' . $mimeType);
    readfile($staticPath);
    exit;
}

// Handle rewrites
foreach ($config['rewrites'] as $pattern => $replacement) {
    if (preg_match('#^' . $pattern . '$#', $requestUri, $matches)) {
        $rewrittenPath = preg_replace('#^' . $pattern . '$#', $replacement, $requestUri);
        //Handle extra path info
        if (strpos($rewrittenPath, '/') !== false && strpos($replacement, '$1') !== false) {
            $parts = explode('/', $rewrittenPath);
            $scriptPath = $parts[0];
            $pathInfo = '/' . implode('/', array_slice($parts, 1));
            $_SERVER['PATH_INFO'] = $pathInfo;
            require $scriptPath;
        } else {
            require $rewrittenPath;
        }
        exit;
    }
}

// Handle non-existent PHP files in src
$phpPath = 'src/' . $requestUri . '.php';
if (file_exists($phpPath)) {
    require $phpPath;
    exit;
}

// If no match, handle 404
http_response_code(404);
if (isset($config['error_pages']['404'])) {
    require $config['error_pages']['404'];
} else {
    require 'src/404.php';
}
exit;
?>
