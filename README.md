# News API

![News API](https://github.com/daluj/newsAPI/workflows/News%20API/badge.svg)

This is a simple REST API build with Lumen Framework.

## What can I do with this API?
You can:
- Create news by making a POST request to: {url}/api/news
- Get all news created by making a GET request to: {url}/api/news 

Please bare in mind that the requests to both endpoints have to be authenticated. The authentication implemented on this API is simple set an Authorization Bearer header on each of the requests. Only the following headers are accepted:
* Authorization Bearer usertoken
* Authorization Bearer admintoken

If you want to implement a better authentication, change [authentication file](app/Http/Middleware/Authenticate.php)

### Examples

Results when making a GET request to {url}/api/news:
![alt text](postman/get_news.png)

Results when making a POST request to {url}/api/news:
![alt text](postman/create_news.png)

## Installing

Check the [installation doc](INSTALLING.md) section

## Testing

Check the [testing doc](TESTING.md) section

## Technologies

Project is created with:
* Lumen framework version: ^8.0
* PHP version: ^7.3
