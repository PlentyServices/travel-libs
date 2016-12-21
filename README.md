# Plenty Service's Travel Libs # 

## Info ##

PHP Package zur Plenty Service's Travel API.

Dieses Package enthält:

* Request Client 
* Protobuf PHP Klassen

## Manual ##

**Installation via Composer**
> composer require plenty/travel-libs

**Request Kurz Beispiel**

```
   <?php
   require_once '../vendor/autoload.php';
    
   use \PlentyServices\TravelLibs\TravelApiRequest;
   use \PlentyServices\TravelLibs\Protobuf\Person;
   use \DrSlump\Protobuf\Codec;
   
   ...
   
   $person = new Person();
   
   $person->setNameFirst(John);
   $person->setNameLast(Doe);
   $person->setGender(male);
   
   $codec = new Codec\Json();
   
   $jsonDocument = $person->serialize($codec);
   
   $request = new TravelApiRequest();
   $request->setAccessKey('58E66190-BDDD-42EA-8D8F-D3BFBD05B91A');
   $request->setApiEndpoint('travel.plenty.services');
   $request->setAction('/test');

   $request->addJsonDocument($jsonDocument);
   
   $request->devMode();
   $result = $request->request();
   
   ...
```
   
   
