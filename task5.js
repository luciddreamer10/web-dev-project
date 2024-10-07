import { createServer } from 'http';

// Create a server object
const server = createServer((req, res) => {
    // Set the response HTTP header with HTTP status and Content type
    res.writeHead(200, { 'Content-Type': 'text/html' });

    // Create a dynamic response
    const dynamicContent = `
    <html>
        <head>
            <title>My Simple HTTP Server</title>
        </head>
        <body>
            <h1>Welcome to my simple HTTP server!</h1>
            <p>The current date and time is: ${new Date().toLocaleString()}</p>
        </body>
    </html>
    `;

    // Send the response body
    res.end(dynamicContent);
});

// The server object listens on port 3000
server.listen(3000, () => {
    console.log('Server is running at http://localhost:3000/');
});
