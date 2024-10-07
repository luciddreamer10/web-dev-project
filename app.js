$(document).ready(function(){
    // Extract text from paragraphs with class 'info'
    $(".info").each(function(){
        console.log($(this).text());
    });

    // Extract text from list items
    $("ul li").each(function(){
        console.log($(this).text());
    });

    // Traverse the DOM to find specific elements
    var firstParagraph = $("#content").find(".info").first().text();
    console.log("First paragraph text: " + firstParagraph);

    var secondListItem = $("ul").children("li").eq(1).text();
    console.log("Second list item text: " + secondListItem);
});
