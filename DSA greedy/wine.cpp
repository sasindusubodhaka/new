#include<iostream>

using namespace std;

struct object{
	float weight;
	float price;
	float density;
};


int main(){
	int bottles; //number of bottles Sadun baught
	int barrels; //number of barrels in the wine yard
	int wt=0;	//total bottles
	float sumvalue=0; //optimal value
	
	
	cin>>bottles; //input number of bottels sadun baught
	cin>>barrels; //input number of barrels in the wine yard
	

    object arr[barrels];   //array of barrels which has information of all barrels;
	float fractarray[barrels]; //array which takes the values of each selected barrel 
	
	 
	for(int i=0; i<barrels; i++){ 

		cin>>arr[i].weight; //input the volume of each barrels(in bottles);
		        
	}
	for(int x=0; x<barrels; x++){
			cin>>arr[x].price; //input the whole price  of each barrels
			arr[x].density=arr[x].price/arr[x].weight; //calculate the density values
	}
	for(int m=0; m<barrels; m++){
		//sorting the struct array acording to the densities
		for(int j=0; j<barrels; j++){
				struct object temp;
				if(arr[j].density<arr[j+1].density){
					temp=arr[j];
					arr[j]=arr[j+1];
					arr[j+1]=temp;

			    }
		}

	}
	cout<<endl;
	//can view the status of the barrels by uncommenting this for loop
	/*for(int j=0; j<barrels; j++){
		
		cout<<"barral: "<<j+1<<" volume :"<<arr[j].weight<<" price :"<<arr[j].price<<" density: "<<arr[j].density<<endl;
		
	}*/
	for(int j=0; j<barrels; j++){ //create a fraction array
		fractarray[j]=0;
		
	}
	//greedy algoritm
	int v=0;
	while(wt<bottles){	 //check the limit of knapsak	
		if(wt+arr[v].weight<=bottles){
			fractarray[v]=(arr[v].weight)*arr[v].density; //store the values in fractoin array
			wt+=arr[v].weight;		//add bottles to knapsack
		}
		else{
			fractarray[v]=((bottles-wt)/arr[v].weight)*arr[v].price; //fraction and store values
			wt=bottles; //set the total bottles to limit
		}		
		v++;
		
	}
	for(int k=0; k<barrels; k++){
		sumvalue+=fractarray[k];  //adding all the values of fraction array
	}

	cout<<"result: "<<sumvalue<<endl;  //print the optimal value


	return 0;
}