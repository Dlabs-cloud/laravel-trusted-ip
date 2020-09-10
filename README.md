## Laravel-Trusted-Ip.  
Allow only your trusted IP address access services in real time. Update and change data base values from the db layer intead of accessing .env every time.   
  
  Ths package is IPAware and allows you to restrict Ips else only allow Ips that have been registered.
  

## Installation

#### Via Composer

To install via composer, run the following command in the root of your Laravel application:

```bash
$ composer require dlabs.cloud/laravel-trusted-ip
``` 
  

You will have to run `php artisan migrate` to run update your db.  
  
## Usage  
If you wish you can create an alias for the middleware in the app kernel thats up to you though. 
  
  ```bash
 'trusted.ip.address' => \Dlabs\LaravelTrustedIp::class  
``` 

Although You can also directly call the class  in you route.


You can then guard your route as you wish   
  
  ```bash
 Route::get('/trusted-ip', 'TestController@trustedIp')->middleware('trusted.ip.address');  
  ``` 

***The trusted Ip also allow parameters to be passed to it.***  
  
   ```bash
 Route::get('/trusted-ip', 'TestController@trustedIp')->middleware('trusted.ip.address: reliance');  *This will check if the client IP making the request matches the name **reliance** on the trusted IP table.*  
   ``` 
**NB:** If no param is passed to the middleware it will only validate if the client IP exist on the trusted_ip_address table.   
  
**`If you think you will have many clients that will be hitting that end point you can pass multiple IP names.`**  
   ```bash
 Route::get('/trusted-ip', 'TestController@trustedIp')>middleware('trusted.ip.address:paystack,monify,interswitch');  
  ``` 

Intesting right?  
  
## Test  
  
🙆🏿‍♂️😭😭😭😭😭😭😭😭😭😭😭  
No test, zero test coverage. But coming soon.