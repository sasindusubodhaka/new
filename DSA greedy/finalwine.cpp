#include<iostream>
#include<cmath>
using namespace std;

struct object{// data structure to keep candidate informaiton 
	double weight;
	double price;
	double density;
	double remain;
};


int main(){
	int bottles; //number of bottles Sadun baught
	int barrels; //number of barrels in the wine yard
	int wt=0;	//total bottles
	double sumvalue; //optimal value
	
	
	cin>>bottles; //input number of bottels sadun baught
	cin>>barrels; //input number of barrels in the wine yard
	

    object arr[barrels];   //array of barrels which has information of all barrels;
	double fractarray[barrels]; //array which takes the values of each selected barrel 
	
	 
	for(int i=0; i<barrels; i++){ 

		cin>>arr[i].weight; //input the volume of each barrels(in bottles);
		        
	}
	for(int x=0; x<barrels; x++){
			cin>>arr[x].price; //input the whole price  of each barrels
			if(arr[x].weight>=1)
                 arr[x].density=arr[x].price/arr[x].weight; //calculate the density values
            else    
                 arr[x].density=arr[x].price;
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
	//greedy algoritm
	int v=0;
	int m,n;
	double mk;
	while(wt<bottles){	 //feasiable function		
		if(arr[v].weight>=1){
		    m=floor(arr[v].weight);
			arr[v].remain=arr[v].weight-m;
		}
		else{
			m=ceil(arr[v].weight);
			arr[v].remain=0;
		}	
		if(wt+m<=bottles){
			//selection function
			for(int i=0; i<v; i++){
				if(arr[v].weight<1){
					if(arr[v].density<((arr[i].remain)*(arr[i].density))){
						n=1;
						mk=(arr[i].remain)*(arr[i].density);
						arr[i].remain-=arr[i].remain;	
									
					}
				}

			}
			if(n==1){					
					sumvalue+=mk;
					wt++,n=0,mk=0.0;								
			}
			else{
					if(arr[v].weight<1)
						sumvalue+=arr[v].weight*arr[v].density;			
					else
						sumvalue+=m*arr[v].density; //store the values in fractoin array
					wt+=m;  //add bottles to knapsack

			}
		}
		else{
			sumvalue+=(bottles-wt)*arr[v].density;
			wt=bottles; //set the total bottles to limit
		}
		v++;
		
	}
	cout<<endl<<sumvalue<<endl;  //print the optimal value


	return 0;
}