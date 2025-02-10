# UBWeb
This is a full-stack server solution to upload UltiBlocks projects.
## Development
You will need Docker.

Use these two commands:
```
docker build -t ubweb .
docker run -p 8080:80 ubweb
```

Go to http://localhost:8080 and a page saying "Program anything" should appear.

Alternatively, UBWeb can run on a bare-bones server, but this is not recommended as it is hard to manage properly.
