#include<stdio.h>
#include<conio.h>

int fahrenheit(x){
int f;
   
    return f;
}

void coordenadas(a,b){

    if(a>-150 && a<0){
        printf("voce esta no hemisferio oeste\n");
    }
    else{
        printf("voce esta no hemisferio leste\n");
    }

    if(b>0 && b<90){
        printf("voce esta no hemisferio norte\n");
    }
    else{
        printf("voce esta no hemisferio sul\n");
    }

}

void fusohorario(){
    int x,min,brasilia,fernando,mt,ama,fuso;


    printf("digite em qual fuso horario que voce esta:\n");
    printf("digite 1 para fernando de noronha\n");
     printf("digite 2 para brasilia\n");
      printf("digite 3 para amazonas\n");
       printf("digite 4 para acre\n");
       scanf("%d",&fuso);


    switch(fuso){
    case 1:{
        printf("digite seu horario:\n horas");
        scanf("%d",&x);
        printf("\nmin");
        scanf("%d",&min);

        brasilia=x-1;
        mt=x-2;
        ama=x-3;

        printf("seu horario no fuso horario de brasilia: %d:%d\n",brasilia,min);
        printf("seu horario no fuso horario de amazonas: %d:%d\n",mt,min);
        printf("seu horario no fuso horario do acre: %d:%d\n",ama,min);
        break;
    }
    case 2:{
        printf("digite seu horario:\n horas");
        scanf("%d",&x);
        printf("\nmin");
        scanf("%d",&min);

        fernando=x+1;
        mt=x-1;
        ama=x-2;

        printf("seu horario no fuso horario de fernando: %d:%d\n",fernando,min);
        printf("seu horario no fuso horario de amazonas: %d:%d\n",mt,min);
        printf("seu horario no fuso horario do acre: %d:%d\n",ama,min);
        break;
    }
    case 3:{
        printf("digite seu horario:\n horas");
        scanf("%d",&x);
        printf("\nmin");
        scanf("%d",&min);

        brasilia=x+1;
        fernando=x+2;
        ama=x-3;

        printf("\nseu horario no fuso horario de brasilia: %d:%d\n",brasilia,min);
        printf("seu horario no fuso horario de fernando de noronha: %d:%d\n",fernando,min);
        printf("seu horario no fuso horario do acre: %d:%d\n",ama,min);
        break;
    }
    case 4:{
        printf("digite seu horario:\n horas");
        scanf("%d",&x);
        printf("\nmin");
        scanf("%d",&min);

        brasilia=x+2;
        mt=x+1;
        fernando=x+3;

        printf("seu horario no fuso horario de brasilia: %d:%d\n",brasilia,min);
        printf("seu horario no fuso horario de amazonas: %d:%d\n",mt,min);
        printf("seu horario no fuso horario de fernando de noranha: %d:%d\n",fernando,min);
        break;


    }

    }


}


int main(){
    int longitude,latitude,op,a,b,x,t,rl,cl,sl,ops,f;

    printf("digite qual op�ao de geografia voce quer consultar:\n");
    printf("digite 1 para relevo\n");
    printf("digite 2 para coordenadas geograficas\n");
    printf("digite 3 para os principais solos do Brasil\n");
    printf("digite 4 para fusos horario\n");
    printf("digite 5 para climas\n");

    scanf("%d",&op);

    switch(op){
    case 1:{
        printf("\nDigite o relevo que deseja saber sobre:");
        printf("\nDigite 1 para  planaltos:");
        printf("\nDigite 2 para  planicie:");
        printf("\nDigite 3 para depressoes :");
        scanf("%d",&rl);
        switch(rl){
        case 1:{
        printf("\n Os planaltos est�o entre as plan�cies e as montanhas: s�o menos planos que o primeiro relevo e menos �ngremes que as montanhas. Entre as formas comuns presentes nos planaltos, est�o os morros, serras, escarpas e chapadas");
        break;
        }
        case 2:{
            printf("\n  Uma plan�cie � sempre sedimentar, portanto uma �rea plana que recebe sedimentos de outra �rea �, pelas conven��es internacionais, uma plan�cie. ");
        break;
        }
        case 3:{
            printf("\nas depress�es s�o �reas rebaixadas (planas ou c�ncavas) formadas, sobretudo, pelos processos de eros�o e intemperismo (a��o dos ventos e da �gua)");
            break;

        }
        }
        }



    case 2:{
    printf("digite sua longitude:\n");
    scanf("%d",&longitude);
    printf("\ndigite sua latitude:\n");
    scanf("%d",&latitude);
    void coordenadas(a,b);
    break;
    }
    case 3:{
        printf("Digite 4 para saber sobre o solo massape:\n");
        printf("Digite 5 para saber sobre o solo aluviais:\n");
        printf("Digite 6 para saber sobre o solo salmourao:\n");
        printf("Digite 7 para saber sobre o solo terra roxa:\n");
        scanf("%d",&ops);
        switch(ops){
        case 4:{
        printf("\nSolo Massape");
        printf("\n� um solo encontrado principalmente no litoral nordestino constitu�do a partir da decomposi��o de rochas com caracter�sticas minerais de gnaisses de tonalidade escura, calc�rios e filitos.");
        break;
        }

        case 5:{
        printf("\nSolo Aluvias");
        printf("\nsolos formados por fragmentos de rocha provenientes de outros lugares e que s�o trazidos pela a��o dos ventos e das �guas. Esse tipo de solo pode ser encontrado em v�rias �reas do territ�rio brasileiro, principalmente em regi�es de v�rzea e que s�o pr�ximas a rios ou outros cursos d'�gua.");
        break;
        }

        case 6:{
        printf("\nSolo Salmourao");
        printf("\n � um solo proveniente da decomposi��o, principalmente, do granito. Encontra-se distribu�do em �reas do Centro-Oeste, do Sudeste e do Sul do Brasil. � bastante arenoso e menos f�rtil que os demais, al�m de apresentar certo n�vel de acidez.");
        break;
        }

        case 7:{
        printf("\nSolo terra roxa");
        printf("\nTerra roxa: corresponde a um tipo de solo de extrema fertilidade que det�m uma tonalidade avermelhada. Pode ser encontrado em Goi�s, Minas Gerais, Mato Grosso do Sul e S�o Paulo. � originado a partir da decomposi��o de rochas, nesse caso de basalto.");
        break;
        }
        }break;}










    case 4:{
    fusohorario();
    break;
    }

    case 5:{
        printf("digite qual opcao sobre clima que voce quer:\n");
        printf("digite 1 para entrar em um conversor de temperatura\n");
        printf("digite 2 para acessar informacoes sobre climas especificos do Brasil:\n");

        scanf("%d",&t);

        switch(t){
        case 1:{
            printf("digite sua temperatura em graus celsius: ");
            scanf("%d",&x);
             f=x*1.8+32;
             printf("sua temperatura em fahrenheit %d",f);
            break;

        }

          case 2:{
         printf("digite 3 para saber sobre o clima equatorial:\n");
         printf("digite 4 para saber sobre o clima tropical:\n");
         printf("digite 5 para saber sobre o clima semiarido:\n");
         printf("digite 6 para saber sobre o clima tropical de altitude:\n");
         printf("digite 7 para saber sobre o clima tropical atlantico:\n");
         printf("digite 8 para saber sobre o clima subtropical:\n");
          scanf("%d",&cl);
            switch(cl){
         case 1:{
             printf("\nClima Equatorial:");
             printf("\n No clima equatorial esta presente na porcao norte, especialmete nos estados do Amazonas, Roraima, Acre, norte do Mato Grosso, Amap� e uma pequena parte dp extremo noroeste do Maranh�o ");
             break;
         }

        case 2:{
         printf("\nClima Tropical:");
         printf("\nO clima Tropical abrange vasta �rea do territ�rio brasileiro: a regi�o Centro-Oeste, oeste de S�o Paulo, de Minas Gerais e da Bahia e se estende por parte dos Estados do Maranh�o e Piau�. � um clima alternadamente �mido e seco.");
         break;

         }
        case 3:{
         printf("\nClima Semiarido:");
         printf("\nO Clima Semi�rido apresenta altas temperaturas, chuvas escassas e mal distribu�das, com longos per�odos de estiagem. � o clima mais quente do Brasil, dominante no sert�o nordestino.");
         break;

         }

        case 4:{
         printf("\nClima Tropical de Altitude:");
         printf("\nO clima tropical de altitude ocorre nas �reas elevadas da regi�o Sudeste do Brasil, predominantemente. Diferencia-se do clima tropical t�pico por causa de suas temperaturas mais amenas. As temperaturas m�dias variam entre 18 �C e 22 �C, com ver�es relativamente mais quentes.");
         break;

         }

        case 5:{
         printf("\nClima Tropical Atlantico:");
         printf("\nTropical atl�ntico: est� presente na zona litor�nea que se estende do Rio Grande do Norte, no Nordeste, ao Paran�, no Sul. A temperatura � elevada, por volta de 25 �C. As chuvas, regulares e bem distribu�das, s�o mais intensas no Sul e no Sudeste durante o ver�o e no Nordeste, durante o inverno.");
         break;

         }
        case 6:{
         printf("\nClima Subtropical:");
         printf("\no clima subtropical � marcado pela elevada amplitude t�rmica anual, com invernos frios, de temperaturas inferiores a 18 �C, e ver�es quentes, que podem chegar a 30 �C em algumas �reas. O volume anual de chuvas varia entre 1250 mm e 1500 mm, distribuindo-se de forma homog�nea durante o ano.");
         break;

         }}}







}}}}





