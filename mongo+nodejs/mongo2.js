
const MongoClient = require('mongodb').MongoClient;
// const uri = "api-key";
const client = new MongoClient(uri, { useNewUrlParser: true ,useUnifiedTopology:true});
client.connect(err => {
  const collection = client.db("first").collection("a");
  // perform actions on the collection object
  console.log("connected");
  client.close();
});
