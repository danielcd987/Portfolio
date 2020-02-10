package classwork;
import java.util.Random; //imports the random class 

public class classFeb4 {
	public static void main(String[] args) {
		
		//random arrays 
		//creates a random number from 0 to 0.999999999999999
		double r1 = Math.random(); //random number 
		System.out.println(r1); //prints out the random number 
		
		//create a counter of how many times a small number and a large number appears
		int smallN= 0;
		int largeN = 0;
		
		
		//loops the if statement 100 times to see if it works
		
		for(int i = 0 ; i < 100; i++) {
			//checks to see if the random number is less than 0.5
			if(r1 < 0.5) {
//				System.out.println("Small Random Number" + "= "+ r1); //prints the value of the number
				smallN++; //counts small number
				
			}
			else {
//				System.out.println("Large Random Number" + "= " + r1);
				largeN++; //counts large number
			}
			r1 = Math.random();
			
		}
		//prints out the amount of times a small number and a large number appears during the loop
		System.out.println(smallN);
		System.out.println(largeN);
		//
		//
		
		//using the random class to create random numbers 
		//
		//
		Random rNum = new Random(); //new creates a new object to access methods
		System.out.println(rNum.nextInt(9)+1); //gives a number from 1 to "" the plus one makes it to the max number you want 
//		System.out.println(rNum.nextInt(bound:10)); //another way of creating a random. 
		
		//
		//
		//
				
	} //public status void 
	
}//public class
