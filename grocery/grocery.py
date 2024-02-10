list_of_grocery = []
list_of_user_cash = []

def setup():
    print("============Fric's' Global Supermarket=============")
    print("1. Choose a groceries")
    print("2. Bought in a cashier")
    print("3. Remove Groceries")
    print("4. Display list of groceries")
    print("5..Type 'Q' or 'q ' to exit in the program")
    
    choose = str(input("Enter a number: "))
    if choose == "1":
        choose_1 = buyAGrocery()       
        if choose_1 == "2":
            removeGrocery()
        elif choose_1 == "1":
            buyAGrocery()    
            
    elif choose ==  "2":
        cashier()
    elif choose == "3":
        choose_3 = removeGrocery()    
        if choose_3 == "1":
            buyAGrocery()   
            
    elif choose == "4":
        displayList()
        
    elif choose == "Q" or choose == "q":
        print("Thank you for buying! Please come again in the future!")
        
    else:
        print("Invalid choices! Try again")
        setup()

def chooseGrocery():
        print("\n============Choose Grocery==============")
        print("P39 Surf Pack")
        print("P20 - Bingo")
        print("P59 Downy Pack - Sunrise Fresh")
        print("P29 BearBrand")
        print("P35 Whisper Napkin w/ Wings")
        print("P24 Oreo")
        
def buyAGrocery():   
        chooseGrocery()
        for grocery in range(0, 3):
            grocery = str(input("Enter item: "))
            list_of_grocery.append(grocery)
            
            quantity = len(list_of_grocery)
        print(f"{list_of_grocery} Quantity {quantity} pieces")
        setup()

def cashier():
    user_cash = int(input("Enter cash: "))
    list_cash = list_of_user_cash.append(user_cash)
    for cash_disp in list_of_user_cash:
        print(cash_disp)
            
    cashier = int(input("Cash for change: "))
            
    change = user_cash - cashier
    print(f"Change  P{change}")
    setup()
            
def removeGrocery():
        for i in range (0, 2):
            remove_groceries = str(input("Enter a grocery to remove: "))
            list_of_grocery.remove(remove_groceries)
            list_of_grocery.sort()    
        
        for disp in list_of_grocery:
            print(disp)
        
        setup()
        
def displayList():
    print("List items ", list_of_grocery)
    setup()

if __name__ == "__main__":
    setup()