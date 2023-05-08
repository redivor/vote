$user_agent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($user_agent, 'Googlebot') !== false || strpos($user_agent, 'facebookexternalhit') !== false) {
    header("HTTP/1.1 403 Forbidden");
    exit;
}
