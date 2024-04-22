package JavaPractice;

import javax.swing.JOptionPane;
public class PopupScreen {
    String user_name;

    public PopupScreen(String username){
        this.user_name = username;
    }

    public void popup()  {
        JOptionPane.showMessageDialog(null, "Pwede ko muna ma hack account mo hehe", "Hi " + this.user_name + "!", JOptionPane.INFORMATION_MESSAGE);
        JOptionPane.showMessageDialog(null, "Your PC runs into problem and needs to restart", "Hi " + this.user_name + "!", JOptionPane.ERROR_MESSAGE);
        int yesOrNo = JOptionPane.showConfirmDialog(null, "Do you want to restart?", "Error 404", JOptionPane.YES_NO_OPTION);
    }
}