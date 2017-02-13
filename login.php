<?
$fb = new Facebook\Facebook([
  'app_id' => '1749228825402429', 
  'app_secret' => '82029e2eca7987fb0ba532a7dad6107b',
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email,name']; /*/Optional permissions*/
$loginUrl = $helper->getLoginUrl('http://pruebasapi.esy.es/adic/development/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';



?>
