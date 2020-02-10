package classwork;

public class quesc119 {
	public static void main(String [] args) {

		num(14); //needs a number value since its defined as an integer
		
	}
	
	static int num (int number) {
		 int numbers = 0;
		 int count = 0;		 
		 
		 if(number > 2) { 	//this if statement executes the code if the value of num is greater then 2. if it is less than two then it returns
			 				//the message in the else statement
			while(number > 2) {
				number = number/2; //numbers is the number value and divided by two
				System.out.println(numbers); //prints out the value of numbers
				numbers++; //this increments the count of numbers
				count++;
				break; //this ends the while loop
				
				}
		 } 
			 else {System.out.println("Enter a number greater than 2");}	//prints message if the value is less than two
			 return count; //returns the numbers value  
	}
}

/* I know in this problem you need a if statement to make sure the value is greater than 2 
 * and a while loop to loop through the numbers and the division
 * i am having trouble taking the new value of numbers and going through the process again.
 * right now all this program is doing is making sure the value is greater than two and dividing it by 2 
 */
