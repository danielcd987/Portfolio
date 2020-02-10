package classwork;
public class ques15 {
	public static void main(String[] args) {
	//what is it taking in and what is it taking out
	//takes a single integer and spitting out the sum of a certain integer
		
		System.out.println(sumThings(5)); //sysout and control space creates the print line command
		
		
	}
	
	 static int sumThings(int n) {	//parameter// all methods start with static
		 int sum = 0;
		 for(int i = 1; i<=n; i++) { //this loops the block of code until a certain point which ends when the n value hits.
			 //sum = sum + i;
			 sum += i;
		 }
		 
		return sum;
	}
	
}
