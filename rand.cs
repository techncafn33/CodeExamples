using System;
using System.Threading;
public class Lottery
{
static void Main()
{
private static void Demo (Random rand)
{
Console.WriteLine("\n*******Your Lottery Numbers:*******");
for (int set = 1; set <= 6; set++)
{
string input;
Console.Write("{0,6}", rand.Next(0, 76));
Console.WriteLine("Retrieve more numbers? Y or N");
input = Console.ReadLine();
while (input == "Y")
{
Console.Write("{0,6}", rand.Next(0, 76));
}
break;
}
}}}
