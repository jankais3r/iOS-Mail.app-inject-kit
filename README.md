# iOS 8.3 Mail.app inject kit

Back in January 2015 I've stumbled upon a bug in iOS's mail client, resulting in <meta http-equiv=refresh> HTML tag not being ignored. This bug allows remote HTML content to be loaded, replacing the content of the original e-mail message. JavaScript is disabled in this UIWebView, but it is still possible to build a functional password "collector" using simple HTML and CSS.

It was filed under Radar #19479280 back in January, but the fix was not delivered in any of the iOS updates following 8.1.2.
Therefore I decided to publish the proof of concept code here.

Demo: https://www.youtube.com/watch?v=9wiMG-oqKf0


## Usage

1) Edit the e-mail address you would like to use for password collection in `framework.php`
2) Upload `index.php`, `framework.php` and `mydata.txt` to your server
3) Send an e-mail containing HTML code from `e-mail.html` to the research subject
   - You can use https://putsmail.com for testing purposes


## Credits

- Framework7: Vladimir Kharlampidi (http://www.idangero.us)
  Framework7's CSS code was used for the login dialog styling


## License

MIT

## Notes

- The code detects that the research subject has already visited the page in the past (using cookies) and it stops displaying the password prompt to reduce suspicion.
- The e-mail address and password are submitted via GET to `framework.php`, which then saves it to the `mydata.txt` file, sends it out via e-mail to the specified e-mail address and then returns the research subject back to Mail.app using redirect to `message://dummy`.
- The password field has autofocus enabled. We then use focus detection to hide the login dialog once the password field loses its focus (e.g. after the subject clicks on OK and submits the password).