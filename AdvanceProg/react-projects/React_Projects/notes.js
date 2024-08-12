class Notes extends React.Component {
    constructor(){
        super();
        this.state = {
            notes: [],
            newNote: ""
        };

        this.handleInputChange = this.handleInputChange;
        this.handleAddNote = this.handleAddNote;
        this.handleClearNotes = this.handleClearNotes;
        this.handleShowAllNotes = this.handleShowAllNotes;
    }

    handleInputChange = (e) => {
        this.setState({newNote: e.target.value});
    }

    handleAddNote = () => {
        if(this.state.newNote.trim()){
            this.setState((note_state) => ({
                notes: [...note_state.notes, note_state.newNote],
                newNote: ""
            }));
        }
    }
    handleClearNotes = () => {
        this.setState({notes: []});
    }

    handleShowAllNotes = () => {
        console.log(this.state.notes);
    }

    render(){
        return (
            <div>
                <h1>Stick Notes</h1>
                <input type="text" onChange={this.handleInputChange} value={this.state.newNote}/>
                <button onClick={this.handleAddNote}>Add Notes</button>
                <button onClick={this.handleClearNotes}>Clear Notes</button>
                <button onClick={this.handleShowAllNotes}>Show all Notes</button>
                <ul>
                    {this.state.notes.map((note, index) => (
                        <li key={index}>
                            {note}
                        </li>
                    ))}
                </ul>
            </div>
        )

    }
}
const root = ReactDOM.createRoot(document.getElementById("root"));
root.render(<Notes/>);