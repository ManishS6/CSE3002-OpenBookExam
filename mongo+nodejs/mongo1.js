const MongoClient = require('mongodb').MongoClient;
const uri = "mongodb+srv://manish.swami2019@vitstudent.ac.in:m@nish123@cluster0.ldvmn.mongodb.net/first?retryWrites=true&w=majority";
const client = new MongoClient(uri, { useNewUrlParser: true, useUnifiedTopology:true});
client.connect(err => {
  const collection = client.db("first").collection("a");
  // perform actions on the collection object
  console.log("db connected");
  client.close();
});
