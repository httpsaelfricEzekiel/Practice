package JavaPractice;
import java.util.Scanner;
import javax.swing.JOptionPane;
public class Setup {
    Scanner input = new Scanner(System.in);

    public Setup(){
        
        String userName = JOptionPane.showInputDialog(null, "Enter name ", "Hi pwede ko muna hack account mo hehe", JOptionPane.OK_CANCEL_OPTION);

        if(userName == null){
            JOptionPane.showMessageDialog(null, "ulitin moooo", "oppssss mali pag input mooo",JOptionPane.INFORMATION_MESSAGE);
        } else {
            PopupScreen u = new PopupScreen(userName);
            u.popup();
        }
    }
}
