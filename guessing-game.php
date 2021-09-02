<?php

$play_count = 0; $correct_guesses = 0; $guess_high = 0; $guess_low = 0;
echo "Guess the random numbers between 1 and 5 and see how accurate you are!\n\n";

  function guessNumber(){
global $play_count, $correct_guesses, $guess_high, $guess_low; 
	  $play_count++;
  $number = rand(1,5);
  echo "What's your guess?\n";
  $input = readline(">> "); $guess = intval($input);
  $affirm = "\n\n";
  if ($guess === $number){$affirm = "\nNICE!\n\n";}
  echo "Round: ${play_count}\n"; echo "Random number: ${number}\n"; echo "Your guess: ${guess} ${affirm}";
if ($guess === $number){$correct_guesses++;}
if ($guess > $number){$guess_high++;}
if ($guess < $number){$guess_low++;}
}
function guessingGame(){
	global $play_count, $correct_guesses, $guess_high, $guess_low;
	guessNumber();guessNumber();guessNumber();guessNumber();guessNumber();
	guessNumber();guessNumber();guessNumber();guessNumber();guessNumber();

	$percent_correct = $correct_guesses / $play_count * 100;

echo "You got ${correct_guesses} out of ${play_count} right and had ${percent_correct} percent accuracy!\n";
						
if ($guess_high > $guess_low){echo "When you guessed wrong you tended to guess high.\n\n";}
else if ($guess_low > $guess_high){echo "When you guessed wrong you tended to guess low.\n\n";}
else if ($correct_guesses === $play_count){echo "Perfect!\n";}
else {echo "You guessed high and low an equal amount.\n";}
	
$play_count = 0; $correct_guesses = 0; $guess_high = 0; $guess_low = 0;
					   }
function replayGame(){
echo "\nDo you want to play again?\n";
$YN = readline(">> ");
if ($YN === "yes"){
	$play_count = 0; $correct_guesses = 0; $guess_high = 0; $guess_low = 0;
echo "Guess the random numbers between 1 and 5 and see how accurate you are!\n\n";
	guessingGame();replayGame();} 
else {echo "Goodbye!\n";}
}

guessingGame();
replayGame();

