# speedtest.php
`v0.2`: `2024-02-26`  
License: `AGPLv3`  

A PHP script to measure connection speed (server → client).  

* Ensure compression is disabled for `speedtest.php`.  
* Feel free to adjust values and math in the script to suit your needs.  
* Requires no JS code, all math is done on the back-end!
* Can also be invoked with `curl`:  
  
  ```
  curl https://example.com/path/speedtest.php
  ```

Additionally:

* `meanspeed-a.html` performs 10 consecutive speed tests and displays the average.
* `meanspeed-b.html` performs 10 simultaneous speed tests and displays the average.
