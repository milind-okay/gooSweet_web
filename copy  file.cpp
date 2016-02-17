#include<iostream>
#include<fstream>
#include <conio.h>
using namespace std;
main()
{
	char *rname, *dname;
const	int Max=180;
	char buffer[Max];
	cout<<"enter source file name  : ";
	//cin>> rname;

ifstream  inf;
inf.open("email.txt");
ofstream outf("email1.txt");
while( !inf.eof() )
{
	inf.getline(buffer,Max);
	cout<< buffer << endl;
	outf <<"'"<< buffer<<"',\n";
getch();
}

inf.close();
inf.open("email1.txt");
while(!inf.eof())
{
	inf.getline(buffer,Max);
	cout<< buffer << endl;
}
inf.close();

return 0;
}
