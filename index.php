<? php
echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>';
echo '<title>Alpha Login & Registration Form Transition</title>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
echo '<link rel="stylesheet" type="text/css" href="style.css">';
echo '<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,900&display=swap" rel="stylesheet">';
echo '</head>';
echo '<body>';
echo '<div class="cont">';
echo '<div class="form sign-in">';
echo '<h2>Sign In</h2>';
echo '<label>';
echo '<span>Email Address</span>';
echo '<input type="email" name="email">';
echo '</label>';
echo '<label>';
echo '<span>Password</span>';
echo '<input type="password" name="password">';
echo '</label>';
echo '<button class="submit" type="button">Sign In</button>';
echo '<p class="forgot-pass">Forgot Password ?</p>';
echo '';
echo '';
echo '</div>';
echo '';
echo '<div class="sub-cont">';
echo '<div class="img">';
echo '<div class="img-text m-up">';
echo '<h2>New here?</h2>';
echo '<p>Sign up and Explore!</p>';
echo '</div>';
echo '<div class="img-text m-in">';
echo '<h2>One of us?</h2>';
echo '<p>If you already have an account, just sign in.</p>';
echo '</div>';
echo '<div class="img-btn">';
echo '<span class="m-up">Sign Up</span>';
echo '<span class="m-in">Sign In</span>';
echo '</div>';
echo '</div>';
echo '<div class="form sign-up">';
echo '<h2>Sign Up</h2>';
echo '<label>';
echo '<span>Name</span>';
echo '<input type="text">';
echo '</label>';
echo '<label>';
echo '<span>Email</span>';
echo '<input type="email">';
echo '</label>';
echo '<label>';
echo '<span>Password</span>';
echo '<input type="password">';
echo '</label>';
echo '<label>';
echo '<span>Confirm Password</span>';
echo '<input type="password">';
echo '</label>';
echo '<button type="button" class="submit">Sign Up Now</button>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<script type="text/javascript" src="script.js"></script>';
echo '</body>';
echo '</html>';
?>