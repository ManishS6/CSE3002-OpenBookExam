const MongoClient = require('mongodb').MongoClient;
const url = "api-key";
MongoClient.connect(url,{useUnifiedTopology:true}, function(err, db) {
  if (err) throw err;
  var dbo=db.db("first");
  var myquery= {address: "Nehru Place"};
  dbo.collection("a").deleteOne(myquery, function(err, obj)
  {
    if (err) throw err;
    console.log("1 document has been deleted");
    db.close();
  });
});