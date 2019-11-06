foyerarray  = [];
foyerarray.push("umbrella stand","painting","shoes"); //this pushes the elements in the array that shows what items are avaliable in the foyer 

livingroomarary = ["bookshelf", "table", "fire place"]; // this array shows what items are avaliable in the living room

kitchenarray = ["sink", "cabinet", "refrigerator", "counter","food"]; // this array shows what items are avaliable in the kitchen

inventoryarray = []; //contains an array of items in the inventory

function game(){
//going to other rooms

// pickup items
    if(document.getElementById("text").value == "pick up book") //pick up book
    {alert("you picked up the book!");
    inventoryarray.push("book");
    }
    if(document.getElementById("text").value == "pick up the book") //pick up book
    {alert("you picked up the book!");
    inventoryarray.push("book");
    }
    if(document.getElementById("text").value == "read the book") //pick up book
    {alert("you read the book!");
     alert("Why did the bike fall over?")
     alert("because it was two tired!") //joke is from https://www.buzzfeed.com/kaylayandoli/corny-jokes-best-jokes
    }
    else if (document.getElementById("text").value == "pick up knife") //pick up knife
    {alert("you picked up the knife");
    inventoryarray.push("knife");
    }
    else if (document.getElementById("text").value == "pick up the knife") //pick up knife
    {alert("you picked up the knife");
    inventoryarray.push("knife");
    }
    else if(document.getElementById("text").value == "show inventory")
    {alert("inventory " + inventoryarray); //this displays all the items in the inventory
    }
    else if(document.getElementById("text").value == "pick up umbrella")
    {alert("you dont need this item"); //umbrella action
    }
    else if(document.getElementById("text").value == "pick up the umbrella")
    {alert("you dont need this item"); //umbrella action
    }
    else if (document.getElementById("text").value == "pick up note") //pick up knife
    {alert("you picked up the note");
    inventoryarray.push("note");
    }
    else if (document.getElementById("text").value == "pick up the note") //pick up knife
    {alert("you picked up the note");
    inventoryarray.push("note");
    }
    
    //allow there to be more pick up items

    //walk in rooms 

    else if (document.getElementById("text").value == "walk in kitchen") //kitchen
    {alert("you entered the kitchen");
     alert("When you enter the kitchen you see a sink, a fridge, a cabinet, and a counter with food and a knife.")
    }
    else if (document.getElementById("text").value == "walk to kitchen") //kitchen
    {alert("you entered the kitchen");
     alert("When you enter the kitchen you see a sink, a fridge, a cabinet, and a counter with food and a knife.")
    }
    else if (document.getElementById("text").value == "walk into kitchen") //kitchen
    {alert("you entered the kitchen");
     alert("When you enter the kitchen you see a sink, a fridge, a cabinet, and a counter with food and a knife.")
    }
    //foyer
    else if (document.getElementById("text").value == "walk in foyer") //foyer
    {alert("you entered the foyer");
     alert("When you enter the foyer you see the front door, a pair of shoes, and an umbrella.")
    }
    else if (document.getElementById("text").value == "walk to foyer") //foyer
    {alert("you entered the foyer");
     alert("When you enter the foyer you see the front door, a pair of shoes, and an umbrella.")
    }
    else if (document.getElementById("text").value == "walk into foyer") //foyer
    {alert("you entered the foyer");
     alert("When you enter the foyer you see the front door, a pair of shoes, and an umbrella.")
    }
    //living room
    else if (document.getElementById("text").value == "walk in living room") //living room
    {alert("you entered the living room");
    alert("When you enter the living room you see a fireplace, a book on the ground, a painting of Jeff, a bookshelf, and a table.")
    }
    else if (document.getElementById("text").value == "walk to living room") //living room
    {alert("you entered the living room");
    alert("When you enter the living room you see a fireplace, a book on the ground, a painting of Jeff, a bookshelf, and a table.")
    }
    else if (document.getElementById("text").value == "walk into living room") //living room
    {alert("you entered the living room");
    alert("When you enter the living room you see a fireplace, a book on the ground, a painting of Jeff, a bookshelf, and a table.")
    }

    //Actions in rooms 

    //kitchen
    else if (document.getElementById("text").value == "walk to sink") //player goes to sink
    {alert("You walked to the sink")
    }
    else if (document.getElementById("text").value == "walk to the sink") //player goes to sink
    {alert("You walked to the sink")
    }
    else if (document.getElementById("text").value == "look at sink") //player looks at sink
    {alert("There's nothing here but dirty dishes. Better look somewhere else.")
    }
    else if (document.getElementById("text").value == "walk to fridge") //player goes to fridge
    {alert("You walked to the fridge.")
    }
    else if (document.getElementById("text").value == "walk to the fridge") //player goes to fridge
    {alert("You walked to the fridge.")
    }
    else if (document.getElementById("text").value == "open fridge") //opens fridge
    {alert("You opened the fridge and only saw vegtables and some milk.")
    }
    else if (document.getElementById("text").value == "drink milk") //drink milk
    {alert("You drank the milk. You end up vommiting because it was expired.")
    }
    else if (document.getElementById("text").value == "pour milk") //pour milk
    {alert("You poured the milk.")
    }
    else if(document.getElementById("text").value == "walk to counter")
    {alert("Walked over to counter. You notice a platter of food and a kitchen knife."); //eat food
    }
    else if(document.getElementById("text").value == "walk to the counter")
    {alert("Walked over to counter. You notice a platter of food and a kitchen knife."); //eat food
    }
    else if(document.getElementById("text").value == "eat food")
    {alert("you ate the food"); //eat food
    }
    else if (document.getElementById("text").value == "walk to cabinet") //player goes to cabinet
    {alert("You walked to the sink")
    }
    else if (document.getElementById("text").value == "walk to the cabinet") //player goes to cabinet
    {alert("You walked to the sink")
    }
    //cabinet
    else if (document.getElementById("text").value == "open the cabinet") //player goes to cabinet
    {alert("You opened the cabinet and saw clean dishes.")
    }

    //living room
    else if (document.getElementById("text").value == "walk to bookshelf") //walk to bookshelf
    {alert("You walked to the bookshelf")
     alert("You notice that a book is missing from the shelf.")
    }
    else if (document.getElementById("text").value == "place book in bookshelf" && inventoryarray) //place the book on the book shelf
    {alert("You placed the book on the bookshelf!")
     alert("The book shelf opened up. It looks like there is a passage way!")
     inventoryarray.splice("book"); //this removes book from the inventory
    }
    else if (document.getElementById("text").value == "place book on bookshelf" && inventoryarray) //place the book on the book shelf
    {alert("You placed the book on the bookshelf!")
     alert("The book shelf opened up. It looks like there is a passage way!")
     inventoryarray.splice("book"); //this removes book from the inventory
    }
    else if (document.getElementById("text").value == "put book on bookshelf" && inventoryarray) //place the book on the book shelf
    {alert("You placed the book on the bookshelf!")
     alert("The book shelf opened up. It looks like there is a passage way!")
     inventoryarray.splice("book"); //this removes book from the inventory
    }
    else if (document.getElementById("text").value == "walk to fireplace") //walk to fireplace
    {alert("You walked to the fireplace. There is a log by the fire.")
    }
    else if (document.getElementById("text").value == "throw log on fire") //throws log on fire
    {alert("You threw a log on the fire. You feel warm and cozy.")
    }
    else if (document.getElementById("text").value == "walk to table") //walk to table
    {alert("You walked to the table. There is a perfectly good birthday cake on the table.")
    }
    else if (document.getElementById("text").value == "eat birthday cake") //Eat cake
    {alert("You ate Jeff's birthday cake. Now you feel guilty eating a whole cake by yourself. :(")
    }
    else if (document.getElementById("text").value == "walk to painting") //walk to painting
    {alert("You walked over to the painting.")
    }
    else if (document.getElementById("text").value == "look at painting") //look at painting
    {alert("You admire the painting of your friend Jeff.")
    }
//foyer show that the front door is locked, interact with umbrella and shoes
    else if (document.getElementById("text").value == "open front door") //open front door
    {alert("The door seems to be barricaded from the outside. There has to be another way out!")
    }
//passage way
    else if (document.getElementById("text").value == "enter passage way") //player goes into passage way
    {alert("You entered the passage way")
     alert("Upon entering the passage way you see Jeffs body on the ground.")
    }
    else if (document.getElementById("text").value == "enter the passage way") //player goes into passage way
    {alert("You entered the passage way")
     alert("Upon entering the passage way you see Jeffs body on the ground.")
    }
    else if (document.getElementById("text").value == "enter the secret passage way") //player goes into passage way
    {alert("You entered the passage way")
     alert("Upon entering the passage way you see Jeffs body on the ground.")
    }
    else if (document.getElementById("text").value == "walk in passage way") //player goes into passage way
    {alert("You walked to the passage way")
     alert("Upon entering the passage way you see Jeffs body on the ground.")
    }
    else if (document.getElementById("text").value == "walk into passage way") //player goes into passage way
    {alert("You walked to the passage way")
     alert("Upon entering the passage way you see Jeffs body on the ground.")
    }
    else if (document.getElementById("text").value == "walk in the passage way") //player goes into passage way
    {alert("You walked to the passage way")
     alert("Upon entering the passage way you see Jeffs body on the ground.")
    }
//Going to Jeff
    else if (document.getElementById("text").value == "go to Jeff") //jeff
    {alert("You walked over to Jeff. There appears to be a note on him.")
    }
    else if (document.getElementById("text").value == "walk to Jeff") //jeff
    {alert("You walked over to Jeff. There appears to be a note on him.")
    }
    else if (document.getElementById("text").value == "go over to jeff") //jeff
    {alert("You walked over to Jeff. There appears to be a note on him.")
    }
    else if (document.getElementById("text").value == "walk up to jeff") //jeff
    {alert("You walked over to Jeff. There appears to be a note on him.")
    }
//read note
    else if (document.getElementById("text").value == "read the note") //jeff
    {alert("You read the note. The note says the murder is this KILLER PARTY!!!!  Jeff then wakes up laughing and you both go enjoy the rest of the party!")
     alert("CONGRATS YOU FINISHED THE GAME!")
    }
    else {alert("you can't do that!");} 
    } //game