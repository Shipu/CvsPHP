#include <bits/stdc++.h>
using namespace std;
int main()
{

	string person[] = {"jodu", "modu", "kodu", "jodu", "modu"};

	for(int i=0;i<5;i++) {
		cout<<person[i]<<endl;
	}

	cout<<endl;
	map<string,int> mymap;
	for(int i=0;i<5;i++) {
		mymap[person[i]]++;
	}


	map<string,int>::iterator it;
	for(it=mymap.begin();it!=mymap.end();it++) {
		cout<<it->first<<" => "<<it->second<<endl;
	}


	cout<<endl;

	return 0;
}