# addlegate
An adblock blocker written in PHP &amp; JS.

## Demonstration
Try the demo at [opendna.com/addlegate](https://opendna.com/addlegate).

## Getting Started
1. Modify addlegate_config.php to match your installation.
2. Copy addlegate.php, addlegate_config.php, and the "ads" directory containing "index.php" to a web server.
3. Inside a `<style>` tags in the `<head>`, insert `<?php echo $addlegate_css; ?>`.
4. At the end of the HTML page, before the closing `<body>` tag, insert `<?php echo $addlegate; ?>`.
5. Done! You pages should now be obnoxious to adblockers and browsers without javascript enabled. (Yay?)

## Prerequisites
This project does not rely on any libraries or frameworks beyond vanilla PHP.

## License

This project is All Rights Reserved and not authorized for any use private or commercial (for the time being). This license will change in the near future.