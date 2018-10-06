<?php
    
    class playerClass
    {
        //Name of the player
        public $name;
        
        //Image of the player
        public $picture;
        
        //Array containing the suits of the player's cards
        public $suits;
        
        //Array containing the values of the player's cards
        public $values;
        
        //Variable to keep track of the total value of the cards
        //in a given player's hand
        public $total = 0;
        
        //The suit and value of a card have the same index,
        //so a 4 of Hearts at index 3 would be represented as
        //$suits[3] = "heart", $values[3] = "4".
    }


    function displayHand(){
    
    }


    function displayWinners(){
    
    }
    
    function getHand(){
        
        //Create the arrays of the cards by suit and fill them
        $clubs = range(1, 13);
        $diamonds = range(1, 13);
        $hearts = range(1, 13);
        $spades = range(1, 13);
        
        //Create the four player variables
        $player1 = new playerClass();
        $player2 = new playerClass();
        $player3 = new playerClass();
        $player4 = new playerClass();
        
        //An array of the possible suits for reference
        $suits = array("clubs", "diamonds", "hearts", "spades");
        
        //An array of the possible names for reference
        $names = array("A", "B", "C", "D");
        
        //Array of the possible pictures for reference
        $pictures = array("APic", "BPic", "CPic", "DPic");
        
        //Array used to pick the players and pictures by index
        $pickPlayer = range(0,3);
        
        
        for ($i = 1; $i <= 4; $i++) {
            //To get past a warning message
            if (!isset($player{$i})) 
                $player{$i} = new playerClass();
            
            //Initialize total of the current player at 0 for counting later
            $player{$i}->total = 0;
            
            //Initialize suits and values as arrays for pushing later
            $player{$i}->suits = array();
            $player{$i}->values = array();
            
            //Keep drawing new cards unless their hand totals at least 36
            while($player{$i}->total < 36) {
                 //Shuffle the entire deck by shuffling the four arrays composing it
                shuffle($clubs);
                shuffle($diamonds);
                shuffle($hearts);
                shuffle($spades);
    
                //Arbitrarily pick a suit before picking a card
                $suit = rand(0,3);
                
                //Use array_shift() to pop off the first value of the array and
                //automatically fix the indices of the array
                $value = array_shift(${$suits[$suit]});
                
                //Add the value of the card to the total
                $player{$i}->total = ($player{$i}->total + $value);
                
                //Push the suit and the value to their respective arrays
                array_push($player{$i}->suits, $suit);
                array_push($player{$i}->values, $value);
            }
            
            //Choose a random name and associated picture
            shuffle($pickPlayer);
            $chosenPLayer = array_shift($pickPlayer);
            
            //Assign name and image based on previous number
            $player{$i}->name = $names[$chosenPLayer];
            $player{$i}->picture = $pictures[$chosenPLayer];
        }
        
        //Debugging
        for ($i = 1; $i <= 4; $i++) {
            echo "<br>";
            echo "Suits in order: ";
            print_r($player{$i}->suits);
            echo "<br>";
            echo "Values in order: ";
            print_r($player{$i}->values);
            echo "<br>";
            echo "Total = ".$player{$i}->total."";
            echo "<br>";
            echo "Name = ".$player{$i}->name."";
            echo "<br>";
            echo "Picture = ".$player{$i}->picture."";
            echo "<br>";
        }
        
        displayHand($player1, $player2, $player3, $player4);
    
    }
?>