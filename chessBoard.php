<?php
echo "<table  border=''2px black' style='border-collapse: collapse'  align = 'center'> ";
for($row = 1; $row <= 8; $row++)
{
    echo "<tr>";
        for($col = 1; $col <= 8; $col++)
        {
            if(($row+$col)%2==0)
            {
                echo "<td height='25px' width='25px' bgcolor= 'black'></td>";
            }
            else{
                echo "<td height='25px' width='25px' bgcolor='white'></td>" ;
            }
            }

        }
        echo "</tr>";

echo "</table>";

