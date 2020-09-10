## Trusted IP Address.  
Allow only your trusted IP address access services in real time. Update and change data base values from the db layer intead of accessing .env every time.   
  
The package is useful for the avengers team to allow service to service calls IP auth.  
  
### Set Up  
Usage is pretty much straight forward and simple, at this time you will have to add the bit-bucket root to your root composer file repositories using `git@github.com:Dlabs-cloud/laravel-trusted-ip.git`   
Here is what your repository should look like once updated.  
   
  
 { ........... "require": {      "php": "^7.1.3",    
      "Dlabs-cloud/laravel-trusted-ip": "dev-master"    
    },    
    "repositories": [    
     {  "type": "vcs",    
      "url": "git@github.com:Dlabs-cloud/laravel-trusted-ip.git"    
      }    
    ],  
     ............  
 }  
Run `composer Install` once you are done. Holla 💃🏽 Every thing is almost set.  
  
You will have to run `php artisan migrate` to run update your db.  
  
## Usage  
If you wish you can create an alias for the middleware in the app kernel thats up to you though,   
  
 'trusted.ip.address' => \Dlabs\LaravelTrustedIp::class  
You can then guard your route as you wish   
  
 Route::get('/trusted-ip', 'TestController@trustedIp')->middleware('trusted.ip.address');  
***The trusted Ip also allow parameters to be passed to it.***  
  
 Route::get('/trusted-ip', 'TestController@trustedIp')->middleware('trusted.ip.address: reliance');  *This will check if the client IP making the request matches the name **reliance** on the trusted IP table.*  
  
**NB:** If no param is passed to the middleware it will only validate if the client IP exist on the trusted_ip_address table.   
  
**`If you think you will have many clients that will be hitting that end point you can pass multiple IP names.`**  
  
 Route::get('/trusted-ip', 'TestController@trustedIp')>middleware('trusted.ip.address:paystack,monify,interswitch');  
Intesting right?  
  
## Test  
  
🙆🏿‍♂️😭😭😭😭😭😭😭😭😭😭😭  
No test, zero test coverage. But coming soon