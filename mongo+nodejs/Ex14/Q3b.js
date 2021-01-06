const MongoClient = require('mongodb').MongoClient;
const url = "mongodb+srv://manishSwami:manish123@cluster0.ldvmn.mongodb.net/first?retryWrites=true&w=majority";
MongoClient.connect(url,{useUnifiedTopology:true}, function(err, db) {
  if (err) throw err;
  var dbo=db.db("first");
  dbo.collection("a").findOne({}, function(err, res) {
    if (err) throw err;
    console.log(res.name);
    db.close();
  });
});