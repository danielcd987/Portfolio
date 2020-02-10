package classwork;

import java.util.Arrays;
import java.util.Random;

//question 231
public class ecosystembearNfish {
	public static void main(String[] args) {
		//main ecosystem runner
		
		Animal[] river = new Animal[5];
		//populates river array
		for(int i = 0; i<river.length; i++) {
			//creates Bears, Fish, or nothing
//			Fish f1 = new Fish(i);
			river[i] = new Fish(); // makes new fish at every position
			river[i] = new Bear(); //makes new bear at every position
			river[i] = new Null();
		}
		
		System.out.println(Arrays.toString(river));
		
		
		//Loop for each iteration (25)
		//during each iteration  (time step)
		//randomly decide what each animal does 
		//follow the rules of movement
		
		
	}//public static void main
}//public class 



class Animal{
	
	
	
	//constructor
	Animal(){
		
	}//animal default constructor
	
	Animal(int p){
		
	}//animal constructor
	
	
	
	// helper methods
	void tryMove(int [] a) {
		//this will try to move the animal to the left or the right randomly
		
		
		
	}//toMove
	
}//Animal

class Bear extends Animal{
	Bear(){
		super(); //looks back to parent class 
	}
}//Bear

class Fish extends Animal{
	Fish(){
		super();//looks back to parent class
	}
}//Fish

class Null extends Animal{
	Null(){
		super();
	}
}//Null
	

