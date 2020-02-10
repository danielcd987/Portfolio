package classwork;
public class ques1_10 {
	public static void main(String[] args) {
		Flower flower2 = new Flower("rose", 8 , (float)12.00); //the new creates a new flower following the object
		Flower flower3 = new Flower("Daisy", 9 , (float)24.00);
		
		System.out.println(flower2.getPrice()); //.get retrieves the methods of the flowers 
		System.out.println(flower2.getName());
		System.out.println(flower2.getpedals());
		
		System.out.println(flower3.getPrice()); //.get retrieves the methods of the flowers 
		System.out.println(flower3.getName());
		System.out.println(flower3.getpedals());
	}
	
}

class Flower{
	//class attributes
	String name;
	int numofPed;
	float price;
	
	//class constructor, creates the flower
	Flower(String name, int ped,float price){
		this.name = name;
		this.numofPed = ped;
		this.price =  (float) price; //type casting
	}//Flower
	
	float getPrice() {
		return this.price;
	}
	String getName() {
		return this.name;
	}
	int getpedals() {
		return this.numofPed;
	}
	
} //Flower
