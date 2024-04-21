package JavaPractice;

import javax.swing.JOptionPane;

public class PopupScreen {
    String user_name;

    public PopupScreen(String username){
        this.user_name = username;
    }

    public void popup()  {
        JOptionPane.showMessageDialog(null, "Pwede ko muna ma hack account mo hehe", "Hi " + this.user_name + "!", JOptionPane.INFORMATION_MESSAGE);
    }
}
