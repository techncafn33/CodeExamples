/*Author: Stacey Pegram 
Description: Stores first and last names in arrays as well as uses Random function along with rand.Next functions to cycle through and retrieve pseudo-random values*/

using System;
public class Names
{
    static void Mail()
    {
        
        string[] firstnames = {"Laura", "Sarah", "John", 
"Daniel", "Cara", "Robert", "Francine", "Austin"}
; 
               string[] lastnames = {"Richardson", "Smith", 
"Franklin", "Johnson", "Brown", "Jacobson", 
"Boggs", "Mcneill"}; 
        
       Random rand = new Random(); 
       
       int fnames = rand.Next(0, firstnames.Length); 
       int lnames = rand.Next(0, lastnames.Length); 
       
      Console.WriteLine("First name: {0}", firstnames[fnames
]); 
      Console.WriteLine("Last name: {0}", lastnames[lnames]
);
    } 
    
}    

