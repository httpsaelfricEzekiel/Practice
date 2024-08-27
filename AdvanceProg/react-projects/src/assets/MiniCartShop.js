import React, {useState} from 'react';

const users = ["Moe", "Kol", "Tay", "Pu"];
const password = ["uglyducks", "chicken", "fiesta", "scissors"];
const items = [
    { name: "Pineapple", price: 25 },
    { name: "Kiwi", price: 50 },
    { name: "Apple", price: 40 },
    { name: "Orange", price: 50 }
]

function MiniCartShop() {
    const [username, setUsername] = useState("");
    const [passwords, setPassword] =useState("");
    const [loggedIn, setLoggedIn] = useState(true);
    const [totalPrice, setTotalPrice] = useState(0);
    const [cartItems, setCartItems] = useState([]);

    function handleLogin(e) {
        e.preventDefault();

        if (users.includes(username) && passwords.includes(password)) {
            console.log(`Login in with username ${username} and password ${password}`);
            setLoggedIn(true);
        } else {
            alert("OOPS YOU ARE NOT A MEMBER OF THIS CARTSHOP!");
        }
    }

    function handleAddToCart(item) {
        const newItem = {
            name: item.name,
            price: item.price
        }

        setCartItems([...cartItems, newItem]);
        setTotalPrice(totalPrice + item.price);

    }

    return (
        <div>
            {!loggedIn ?
                (
                    <form onSubmit={handleLogin}>
                        <label>Username:
                            <input type="text" value={username} onChange={(e) => setUsername(e.target.value)} />
                        </label>
                        <br />
                        <label>
                            Password:
                            <input type="password" value={password} onChange={(e) => setPassword(e.target.value)} />
                        </label>
                        <br />
                        <button type="submit">Log In</button>
                    </form>
                ) : (
                    <div>
                        <h1>Hello {users[0]}</h1>
                        <h2>Available Items</h2>
                        <ul>
                            {items.map((item, index) => (
                                <li key={index}>
                                    {item.name} = PHP {item.price} {""}
                                    <button onClick={() => handleAddToCart(item)}>Add To Cart</button>
                                </li>
                            ))}
                        </ul>
                        <h2>Cart</h2>
                        <ul>
                            {cartItems.map((item, index) => (
                                <li key={index}>
                                    {item.name} - Php{item.price}
                                </li>
                            ))}
                        </ul>
                        <p>Total Price: Php{totalPrice}</p>
                    </div>
                )
            }
        </div>
    );
}

export default MiniCartShop;