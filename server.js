const express = require('express');
const bodyParser = require('body-parser');
const path = require('path'); // Import path module
const app = express();

// Middleware to parse JSON data
app.use(bodyParser.json());

// Serve static files from the 'public' directory (if necessary)
// app.use(express.static('public')); // Commented this out as 'cart.html' isn't in 'public'

// Serve cart.html for the root URL
app.get('/', (req, res) => {
    res.sendFile(path.join(__dirname, 'cart.html'));  // Ensure this matches the location of cart.html
});

// Handle POST request for new comments
app.post('/submit-comment', (req, res) => {
    const { comment } = req.body;

    // Simulate saving to the database
    const newComment = {
        text: comment,
        createdAt: new Date(),
    };

    // Respond with success and the new comment
    res.json({ success: true, newComment });
});

// Start the server on port 3000
app.listen(3000, () => {
    console.log('Server is running on http://localhost:3000');
});
