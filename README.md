# Schema.org Movie Metatag
A movie Scheme.Org module for Drupal 8 Developed for https://www.starwarsthelastjedi.com (An unofficial Star Wars Community). A Sub module of Schema.org Metatag.

This project extends Drupal's Metatag module to display http://schema.org/Movie structured data as JSON LD in the head of web pages.

The module creates the following Schema.org object types:
* Schema.org/Movie

For more information and to test the results:
- https://developers.google.com/search/docs/guides/intro-structured-data
- https://schema.org/docs/full.html
- https://search.google.com/structured-data/testing-tool

For instance, the code in the head might end up looking like this:

```js
<script type="application/ld+json">{
    "@context": "http://schema.org",
    "@graph": [
        {
            "@type": "Movie",
            "name": "Movie Name",
            "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation",
            "director": {
                "@type": "Person",
                "@id": "https://www.example.com/person/name",
                "name": "Person Name",
                "url": "https://www.example.com/person/name",
                "sameAs": "http://www.domain.com/person/name/"
            },
            "musicBy": {
                "@type": "Person",
                "@id": "https://www.example.com/person/name",
                "name": "Person Name",
                "url": "https://www.example.com/person/name",
                "sameAs": "http://www.domain.com/person/name/"
            },
            "productionCompany": [
                {
                    "@type": "Organization",
                    "@id": "https://www.example.com/company/name",
                    "name": "Organization Name",
                    "url": "https://www.example.com/company/name"
                },
                {
                    "@type": "Organization",
                    "@id": "https://www.example.com/company/name",
                    "name": "Organization Name",
                    "url": "https://www.example.com/company/name"
                },
                {
                    "@type": "Organization",
                    "@id": "https://www.example.com/company/name",
                    "name": "Organization Name",
                    "url": "https://www.example.com/company/name"
                }
            ],
            "actors": [
                {
                    "@type": "Person",
                    "@id": "https://www.example.com/person/name",
                    "name": "Person Name",
                    "url": "https://www.example.com/person/name",
                    "sameAs": "http://www.domain.com/person/name/"
                },
                {
                    "@type": "Person",
                    "@id": "https://www.example.com/person/name",
                    "name": "Person Name",
                    "url": "https://www.example.com/person/name",
                    "sameAs": "http://www.domain.com/person/name/"
                },
                {
                    "@type": "Person",
                    "@id": "https://www.example.com/person/name",
                    "name": "Person Name",
                    "url": "https://www.example.com/person/name",
                    "sameAs": "http://www.domain.com/person/name/"
                }
            ],
            "image": {
                "@type": "ImageObject",
                "url": "https://www.example.com/uploads/image.jpg",
                "width": "300",
                "height": "444"
            },
            "trailer": {
                "@type": "VideoObject",
                "name": "Trailer Title",
                "description": "movie Trailer description",
                "thumbnailUrl": "https://www.example.com/uploads/image.jpg",
                "uploadDate": "2017-11-22T08:19:00+0000"
            },
            "dateCreated": "2017-11-22T08:19:00+0000",
            "countryOfOrigin": "USA",
            "duration": "02:30:00"
        }
    ]
}</script>
```

## How to Install

install this module as usual
