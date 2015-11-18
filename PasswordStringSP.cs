/*Author: Stacey Pegram
Description: Retrieves characters from passchar objects and then concatenates characters from the object values to create a password string*/



class password
{
    static void Mail()
    {
        string passChars;
        passChars = "a, b, c, d, e, f, g, h, i, j, k, l, m, 
n, o, p, q, r, s, t, u, v, w, x, y, z"; 
        passChars = "A, B, C, D, E, F, G, H, I, J, K, L, M, 
N, O, P, Q, R, S, T, U, V, W, Y, Y, Z"; 
        passChars = "1, 2, 3, 4, 5, 6, 7, 8, 9, 0"; 
        passChars = "@, #, $, &, !, *"; 
        
        string strpass = ""; 
        
        Random rand = new Random(); 
        for (int i=0; i <= 7; i++)
        {int iRandom = rand.Next(0, passChars.Length -1); 
        strpass +=passChars.Substring(iRandom, 1);
        }
        Console.Write("Password: {0}", strpass); 
    }
}    