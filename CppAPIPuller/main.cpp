#include <iostream>
#include <stdlib.h>
#include <thread>
#include <chrono>
#include <fstream>
#include <stdio.h>

using namespace std;

int main(void) {
   
    for (int i=0; i<1001; i++){
        string file = to_string(i)+"apiJson";
        string files = file+".json";
        const char * c = files.c_str();
        freopen(c, "w", stdout);
        system("curl 'https://api.coinmarketcap.com/v1/ticker/'");
        fclose(stdout);

        this_thread::sleep_for(chrono::seconds(10));
    }
    cout << "done" << endl;
    return 0;
}
