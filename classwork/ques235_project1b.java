package classwork;

//https://www.youtube.com/watch?v=PvAcqfOOLrw

/*
 * to help me understand this problem i looked on youtube and found a video on how to solve this problem
 * by creating an array and adding the list elements you would have to loop through it to see what the elements are
 * i is the first loop and within that loop is another loop that compares the values
 */

public class ques235_project1b {
	public static void main (String[] args) {
//		System.out.println();

		String [] word = {"hi", "dan","Jesus","hi", "dan"}; //the array of strings in an array called word
		int i = 0;
		int count = 0;
		
		for(i=0;i<word.length;i++) { //the for loop that goes through the length of the array
			
			for(int j = i + 1; j < word.length;j++) { //goes through elements j has to be equal to i+1 because it needs to get the second element of the array which is dan and then compare it to the first (hi).
				if(word[i] == word[j]) { //compares the array values of i and j to see if they match 
					
					System.out.println(word[j]);
					count++; //this counts the words repeated
					System.out.println(count);
				}
				
			}
			
//			System.out.println(word[i]); //prints the elements in the array
//			System.out.println(word.length);//prints the length of the array

		}
		

	}
}