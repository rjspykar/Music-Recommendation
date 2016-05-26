
                     // Music Reccomendation program
                     // Group Member - Umang , Vipul , Sanghpriya



#include<bits/stdc++.h>
#include<iostream>
#include<algorithm>
#include<cstdio>
#include<fstream>
#include<vector>
#include<set>
#include<map>
#include<string>

using namespace std;

vector< string >  Userid , Artistid;
vector< int >  Playcount;

map< string , string > Artistname;

int TotalData;

string userid , artistid , artistname , User ;

int playcount;

map< string , int > listenings;

map< string , int >::iterator walk;

set< pair< int , string > > order ;

set< pair< int , string > >::iterator it;

map< string , vector< pair< string , int > > > My;

map< string , set< pair< int , string > > > store;


map< string , int > Final;

map< string , int >::iterator FINAL;

set< pair<int , string > >  ToRecomend;

map< string , int >  Top;

set< pair< int , string > > Topcharts;

int Count = 0;

int main( int argc , char * argv[]  ){

              ifstream cin1("User_data.txt");

              cin1 >> TotalData;


            for(int i = 1 ; i <= TotalData ; ++i ){

                  cin1 >> userid >> artistid >> playcount;

                   Userid.push_back( userid );
                   Artistid.push_back( artistid );
                   Playcount.push_back( playcount );
                   Top[Artistid[i-1]] += playcount;
            }

            ifstream cin2("Artist_data.txt");

            cin2 >> TotalData;


            for( int i = 1 ; i <= TotalData ; ++i ){

               cin2 >> artistid;

               getline( cin2 ,  artistname );

               Artistname[ artistid ] = artistname;

            }

                char * temp = argv[1] ;
           int n = (int) strlen(temp);
                for(int i = 0; i < n; ++i)
                   User += temp[i];
                   if( User == "Top_charts" ){
            ofstream CC("Top_charts.txt");
                 CC << "Artist_ID    ----     Artist_Name    ----    Play_count " << endl << endl;

            for( map< string , int > :: iterator tt = Top.begin() ; tt != Top.end() ; ++tt )
                 if(Artistname[tt->first].size())
                 Topcharts.insert(make_pair( tt->second , tt->first));


            for(set< pair< int , string > > :: iterator TOP = --Topcharts.end() ; TOP != Topcharts.begin() ; --TOP )
            {    CC << (*TOP).second << " " << Artistname[(*TOP).second] <<" "<< (*TOP).first << endl;
                 cout << (*TOP).second << " " << Artistname[(*TOP).second] <<" "<< (*TOP).first << endl;
            }
            return 0;
            }
            if(User == "Display_user_list"){
               ofstream AA("Display_user_list.txt");

               set<  string > SS;
                int id = 1;
               for(int i = 0 ; i <  Userid.size() ; ++i )
                 SS.insert(Userid[i]);
                  for( set< string > :: iterator it = SS.begin() ; it != SS.end() ; ++it )
                    AA << id++ << " " << (*it) << endl;

                  return 0;
            }
             if(User == "User_artist_info"){
               ofstream BB("User_artist_info.txt");

               BB << "Serial Number   ----    Artist_id    ----   Artist_name  " << endl << endl;
               cout << "Serial Number   ----    Artist_id    ----   Artist_name  " << endl << endl;
                 int id = 1;
                 for( map< string , string > :: iterator it = Artistname.begin() ; it != Artistname.end() ; ++it )
                 {
                       BB <<  id <<"   " <<  it->first <<"   " << it->second << endl;
                       cout <<  id++ <<"   " <<  it->first <<"   " << it->second << endl;
                 }
                    return 0;
             }

                for(int i = 0 ; i < Userid.size() ; ++i ){

                        if(Userid[i]  ==  User )
                        listenings[Artistid[i]] += Playcount[i];

                }
                if(listenings.size()==0){
                 cout <<"No Match find, for this user id" << endl;
                 return 0;
                }

                for(walk = listenings.begin() ; walk != listenings.end() ; ++walk )
                         Count +=  walk->second;

                         int Average = 0 ;
                         if(listenings.size())
                         Average = Count/(int)listenings.size();

                 for(walk = listenings.begin() ; walk != listenings.end() ; ++walk )
                               if( walk->second > Average )
                          order.insert(make_pair(walk->second,walk->first));

             for(int i = 0 ; i < Artistid.size() ; ++i ){
                 My[Artistid[i]].push_back(make_pair(Userid[i],Playcount[i]));
             }
             set< string > recom;
             int  Lim = 0;
             for( it = --order.end() ; it != order.begin() && Lim  < 10  ; --it , ++Lim ){
                  int Ct = 0;
               for( int i = 0 ; i < My[(*it).second].size() ; ++i ){
                  Ct += My[(*it).second][i].second;
               }
               int Av = 0;
               if(My[(*it).second].size())
                Av = Ct/(int)(My[(*it).second].size());
               for( int i = 0 ; i < My[(*it).second].size() ; ++i )
                 if(My[(*it).second][i].second > Av )
               recom.insert(My[(*it).second][i].first);
             }
             if(recom.find(User) != recom.end())
              recom.erase(recom.begin());


             for( int i = 0 ; i < Userid.size() ; ++i ){
                store[Userid[i]].insert(make_pair(Playcount[i],Artistid[i]));
             }

                for(set< string >::iterator IT = recom.begin() ; IT != recom.end() ; ++IT ){
                   int Lim = 0;
                      set< pair< int , string > >::iterator WALK;
                      for( WALK = --(store[*IT].end()) ; WALK != (store[*IT].begin())  && Lim < 10 ; --WALK , ++Lim)
                         Final[(*WALK).second] += (*WALK).first;
                 }
              for( FINAL = Final.begin() ; FINAL != Final.end() ; ++FINAL)
                ToRecomend.insert(make_pair(FINAL->second,FINAL->first));

                ofstream ccout("Rating.txt");

                ccout << "Top Songs: \n" << endl;

                for(set< pair< int ,string >  > :: iterator ans = --ToRecomend.end() ; ans != ToRecomend.begin() ; --ans ){
                   if(Artistname[(*ans).second].size()){
                  ccout << (*ans).second <<" "<< (Artistname[(*ans).second]) << endl;
                  cout << (*ans).second <<" "<< (Artistname[(*ans).second]) << endl;
                  }
                  }
  return 0;

}
