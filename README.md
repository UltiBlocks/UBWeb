# UBWeb
This is a client to upload UltiBlocks projects.
## Development
You will need docker.

Use these two commands:
```
docker build -t ubweb .
docker run -p 8080:80 ubweb
```

Go to http://localhost:8080 and a page saying "Program anything" should appear.

Alternatively, UBWeb can run on a barebones server, but this is not recommended as it is hard to manage properly.
