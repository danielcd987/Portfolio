package classwork;
import java.util.Arrays;
import java.util.Random;

public class classfeb4_arraybasics {
	public static void main(String[] args) {
		//creates an empty ray with 50 elements
		int [] randNums = new int [10];
		
		//create random object allows you to use the class as methods 
		Random r = new Random();
		
		for(int i = 0 ; i < randNums.length ; i++) {
			//puts random numbers in the array from 1 to 1000
			randNums[i] = r.nextInt(999)+1;
		}
		
		//prints out the array of random numbers
		System.out.println(Arrays.toString(randNums));
		
		System.out.println(isNumThere(randNums, 500));
		
		numSwap(0,1, randNums);
		
		System.out.println(Arrays.toString(randNums));
		
		
	}// public static void
	
	
	//isNumThere ({1 , 2 ,  3 , 4 , 5}, 7)
	static boolean isNumThere(int[] a, int n) {
		
		for(int i = 0; i < a.length; i++) {
			if(n == a[i]) { //loops through the array of a and sees if the n value equals it
				return true;
			}
			
		}
		return false;
	}


	static void numSwap(int in1, int in2, int[] a) {
		
		//swap
		int temp;
		temp = a[in1];
		a[in1] = a[in2];
		a[in2] = temp;
		
	} //numSwap
}//public class
