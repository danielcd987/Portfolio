package classwork;
public class ques16 {
	public static void main(String[] args) {
	//what is it taking in and what is it taking out
	//takes a single integer and spitting out the sum of a certain integer
		
		System.out.println(sumThings(9)); //sysout and control space creates the print line command
		
		
	}
	
	 static int sumThings(int n) {	//parameter// all methods start with static
		 int sum = 0;
		 for(int i = 1; i<=n; i++) {
			 if(i % 2 == 1) {
				//sum = sum + i;
				 sum += i; 
			 }
			 
		 }
		 
		return sum;
	}
	
}
