# Local-SEO
The local SEO plug-in 

OffbeatWP has an SEO plugin for the local business that allows adding and modifying structured data of the ld+json string, that is generated by the Yoast SEO plugin. Using this plug-in you can notify Google (or other search engines that you have a local business). 

- A Type (what kind of company you have)
- The phone number and/or fax number
- The price range of the products the company is selling ($  <-> $$$)
- The company name
- Address Locality
- Days and time the company is open

- To add the package to your offbeatWP theme add it to your package.json in the offbeatWP theme

```bash
composer require offbeatwp/local-seo
```

Next add the following line to your `config/services.php` file:

```
OffbeatWP\LocalSeo\Service::class,
```



